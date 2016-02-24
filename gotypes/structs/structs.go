package main

import (
	//Importing the person package
	"github.com/hamzahaly/info344-class-code/gotypes/structs/person"
)

//Structs

func main()  {
	prs := person.NewPerson("Hamzah", "Aly")
	prs.FirstName = "DR"
	
	prs.SayHello()
}