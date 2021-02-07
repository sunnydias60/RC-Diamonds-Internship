import React, { Component } from 'react'

class ClickCounterTwo extends Component {
     
    render() {
        const {count, incrementor} = this.props
        return (
            <div>
                <button onClick={incrementor}>click {count}</button>
            </div>
        )
    }
}

export default ClickCounterTwo
