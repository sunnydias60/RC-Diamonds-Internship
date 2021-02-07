import React from 'react'
import ReactDOM from 'react-dom'

function PortalDemo() {
    return ReactDOM.createPortal (
        <div>
            portal   
        </div>,
        document.getElementById('portal-root')
        
    )
}

export default PortalDemo
