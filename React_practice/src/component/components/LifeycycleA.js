import React, { Component } from 'react'
import LifeycycleB from './LifecycleB'

class LifeycycleA extends Component {
    constructor(props) {
        super(props)
    
        this.state = {
             name: 'sun'
        }
        console.log('lifecycleA constructor')
    }

    static getDerivedStateFromProps(state, props) {
        console.log('lifecycleA getderived....')
        return null
    }
    
    componentDidMount() {
        console.log('lifecycleA componentdidmount')
    }

    shouldComponentUpdate() {
        console.log('lifecycleA shouldcompo...')
        return true
    }

    getSnapshotBeforeUpdate(prevProps, prevState) {
        console.log('lifecycleA snapshot')
        return null
    }

    componentDidUpdate() {
        console.log('lifecycleA component did update')
    }

    changeState = () => {
        this.setState({
            name: 'codevolution'
        })
    }

    render() {
        console.log('lifecycleA render')
        return (
            <div> 
                <div>
                lifecycle A
                </div>
                <button onClick={this.changeState}>Change</button>
                <LifeycycleB />
            </div>
            
        )
    }
}

export default LifeycycleA
