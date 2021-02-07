import React, { Component } from 'react'

class Regcomp extends Component {
    render() {
        console.log('regular comp')
        return (
            <div>
              regular Component {this.props.name}  
            </div>
        )
    }
}

export default Regcomp
