import React, { Component } from 'react'
import Memocomp from './Memocomp'
import PureComp from './PureCompo'
import Regcomp from './Regcomp'

class Parentcomp extends Component {
    constructor(props) {
        super(props)
    
        this.state = {
             name: 'sun'
        }
    }
    componentDidMount(){
        setInterval(() => {
            this.setState({
                name: 'sun'
            })
        }, 2000)
    }
    render() {
        console.log('************parent**************')
        return (
            <div>
               parent Component 
               <Memocomp name={this.state.name} />
               {/* <Regcomp name={this.state.name}></Regcomp>
               <PureComp name={this.state.name}></PureComp> */}
            </div>
        )
    }
}

export default Parentcomp
