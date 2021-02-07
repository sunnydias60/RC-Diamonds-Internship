import React, { Component } from 'react'

class Classclick extends Component {
    clickhandler() {
        console.log("clicked")
    }
    render() {
        return (
            <div>
              <button onClick={this.clickhandler}>clickme</button>  
            </div>
        )
    }
}

export default Classclick
