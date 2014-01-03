//Person Model
var Person = Backbone.Model.extend({
	defaults: {
		name: 'Jos VV',
		age: 30,
		occupation: 'worker'
	}
});

//A List of People
var PeopleCollection = Backbone.Collection.extend({
	model: Person
});


//The View for a Person 
var PersonView = Backbone.View.extend({
	tagName: 'li',

	className: 'person',

	id: 'some-person',

	template: _.template( $('#personTemplate').html()) ,

	initialize: function() {
		this.render();
	},

	render: function() {
		this.$el.html( this.template(this.model.attributes));
		return this;
	}

});

var peopleCollection = new PeopleCollection([
	{
		name: 'JoS',
		age: 27, 
	},
	{
		name: 'Bebo',
		age: 28,
		occupation: 'web designer'
	},
	{
		name: 'Juan',
		age: 35,
		occupation: 'graphic designer'
	}
]);

console.log(peopleCollection);