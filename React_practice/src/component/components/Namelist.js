import React from 'react'
import Person from './Person'

function Namelist() {
    const names = ['bruce','clark','diana']
    const person = [
        {
            id: 1,
            name: 'bruce',
            age: 30,
            skill: 'react'
        },
        {
            id: 2,
            name: 'clark',
            age: 25,
            skill: 'angular'
        },
        {
            id: 3,
            name: 'diana',
            age: 28,
            skill: 'node'
        },
    ]
const namelist = names.map((name, index) => <h2 key={index}>{index} {name}</h2>)

    // const personlist = person.map(person => (
    //     <Person key={person.id} person={person}> </Person>

    // ))
    return (
        <div>
            {/* <h2>{names[0]}</h2> 
           <h2>{names[1]}</h2>
           <h2>{names[2]}</h2>  */}
            {/* {
               names.map(name => <h2>{name}</h2>)
           } */}
            {namelist}
        </div>
    )
}

export default Namelist
