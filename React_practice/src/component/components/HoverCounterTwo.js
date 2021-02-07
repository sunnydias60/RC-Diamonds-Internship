import React, { Component } from 'react'

class HoverCounterTwo extends Component {
    
    render() {
        const {count, incrementor} = this.props
        return (
            <div>
               <p onMouseOver={incrementor}> hover {count} times </p>
            </div>
        )
    }
}

export default HoverCounterTwo
