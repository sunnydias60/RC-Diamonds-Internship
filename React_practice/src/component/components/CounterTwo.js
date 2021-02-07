import React, { Component } from 'react'

class CounterTwo extends Component {
    constructor(props) {
        super(props)
    
        this.state = {
             count:0
        }
    }

    incrementor = () => {
        this.setState((prevstate) => {
            return {count: prevstate.count + 1}
        })
    }
    render() {
        return (
            <div>
                {this.props.render(this.state.count, this.incrementor)}
            </div>
        )
    }
}

export default CounterTwo
