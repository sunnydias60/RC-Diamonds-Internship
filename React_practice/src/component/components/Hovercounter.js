import React, { Component } from 'react'
import withCounter from './withCounter.js'

class Hovercounter extends Component {
    
    render() {
        const {count, incrementCount} = this.props
        return (
            <div>
                <h2 onMouseOver={incrementCount}> hovered {count} times</h2>
            </div>
        )
    }
}

export default withCounter(Hovercounter)
