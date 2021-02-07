import React, { Component } from 'react'

class LifeycycleB extends Component {
    constructor(props) {
        super(props)
    
        this.state = {
             name: 'sun'
        }
        console.log('lifecycleB constructor')
    }

    static getDerivedStateFromProps(state, props) {
        console.log('lifecycleB getderived....')
        return null
    }
    
    componentDidMount() {
        console.log('lifecycleB componentdidmount')
    }

    shouldComponentUpdate() {
        console.log('lifecycleB shouldcompo...')
        return true
    }

    getSnapshotBeforeUpdate(prevProps, prevState) {
        console.log('lifecycleB snapshot')
        return null
    }

    componentDidUpdate() {
        console.log('lifecycleB component did update')
    }
    render() {
        console.log('lifecycleB render')
        return (
            <div>
            lifecycle B
            </div>
        )
    }
}

export default LifeycycleB
