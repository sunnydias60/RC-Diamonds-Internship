import React, { Component } from 'react'

class Usergreeting extends Component {
    constructor(props) {
        super(props)
    
        this.state = {
             isLoggedIn: true
        }
    }
    
    render() {
        return this.state.isLoggedIn && <div>welcome sun </div>
        // return this.state.isLoggedIn ? 
        //     (
        //         <div>welcome sun </div>
        //     ) : (
        //         <div>welcome guest</div>
        //         )
    }
}

export default Usergreeting
