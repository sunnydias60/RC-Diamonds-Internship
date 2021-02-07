import React from 'react'

function Memocomp({name}) {
    console.log('rendering memo')
    return (
        <div>
           {name} 
        </div>
    )
}

export default React.memo(Memocomp)
