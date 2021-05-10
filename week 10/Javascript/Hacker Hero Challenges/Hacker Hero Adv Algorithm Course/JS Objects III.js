let student = function(name) {
	return {
		name: name,
		hp: 10,
		int: 10,
		study: function(){
            this.hp -= 1;
            this.int += 1;
            return this;
		},
		report: function(){
            console.log( name + " has hp of " + this.hp + " and int of " + this.int);
            return this;
		}
	}
}

let student1 = student('Marcus');
let student2 = student('John');

student1.study();  //decrease hp by 1 and increase int by 1
student1.study();  //decrease hp by 1 and increase int by 1

student1.report();  //have it return 'Marcus has hp of 8 and int of 12'
student2.report();  //have it return 'John has hp of 10 and int of 10'