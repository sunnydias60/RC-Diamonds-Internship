import React, { Component } from 'react'
import Childcomponent from './Childcomponent'

class Parentcomponent extends Component {
    constructor(props) {
        super(props)
    
        this.state = {
             parentname: 'Parent'
        }
        this.greetParent = this.greetParent.bind(this)
    }

    greetParent(child) {
        console.log('a')
        alert(`hello ${this.state.parentname} from ${child}`)
    }
    
    render() {
        return (
            <div>
              <Childcomponent greetHandler={this.greetParent}/>  
            </div>
        )
    }
}

export default Parentcomponent
