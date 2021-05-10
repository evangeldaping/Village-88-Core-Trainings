let Student = function(name) {
	this.name = name;
	this.hp = 10;
	this.int = 10;
    this.study = function(){
            this.hp -= 1;
            this.int += 1;
            return this;
		};
		this.report = function(){
            console.log( this.name + " has hp of " + this.hp + " and int of " + this.int);
            return this;
		}
};

let student1 = new Student('Marcus');
let student2 = new Student('John');

student1.study();  //decrease hp by 1 and increase int by 1
student1.study();  //decrease hp by 1 and increase int by 1

student1.report();  //have it RETURN 'Marcus has hp of 8 and int of 12'
student2.report();  //have it RETURN 'John has hp of 10 and int of 10'