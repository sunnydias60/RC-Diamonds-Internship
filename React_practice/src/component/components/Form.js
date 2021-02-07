import React, { Component } from 'react'

class Form extends Component {
    constructor(props) {
        super(props)
    
        this.state = {
             username: '',
             comment: '',
             topic: 'react'
        }
    }

    changeName = (event) => {
        this.setState({
            username: event.target.value
        })
    }

    changeComment = (event) => {
        this.setState({
            comment: event.target.value
        })
    }
    
    changeTopic = (event) => {
        this.setState({
            topic: event.target.value
        })
    }

    handleSubmit = (event) => {
        alert(`${this.state.username} ${this.state.comment} ${this.state.topic}`)
        event.preventDefault()
    }
    render() {
        const {username, comment, topic} = this.state
        return (
            <form onSubmit={this.handleSubmit}>
                <div>
                    <label>Username</label>
                    <input type="text" value={username} onChange={this.changeName} />
                </div>
                <div>
                    <label>Comment</label>
                    <textarea value={comment} onChange={this.changeComment}/>
                </div>
                <div>
                    <label>Topic</label>
                    <select value={topic} onChange={this.changeTopic}>
                        <option value="react">React</option>
                        <option value="angular">Angular</option>
                        <option value="vue">Vue</option>
                    </select>
                </div>
                <button type='submit'>Submit</button>
            </form>
            
        )
    }
}

export default Form
