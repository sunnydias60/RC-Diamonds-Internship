import React from 'react'

function Person({person}) {
    return (
        <div>
           <h2>i am {person.name}. i am {person.age} yrs old. i know {person.name}</h2> 
        </div>
    )
}

export default Person
