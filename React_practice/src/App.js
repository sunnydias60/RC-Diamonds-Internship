import logo from './logo.svg';
import './App.css';
import Greet from './components/greet'
import Welcome from './components/welcome'
import Hello from './components/hello'
import Message from './components/message';
import Counter from './components/Counter';
import FunctionClick from './components/FunctionClick';
import Classclick from './components/Classclick';
import Eventbind from './components/Eventbind';
import Parentcomponent from './components/Parentcomponent';
import Usergreeting from './components/Usergreeting';
import Namelist from './components/Namelist';
import Stylesheet from './components/Stylesheet'
import Inline from './components/Inline';
import './appStyles.css';
import styles from './appStyles.module.css';
import Form from './components/Form';
import LifeycycleA from './components/LifeycycleA';
import FragmentDemo from './components/FragmentDemo';
import Table from './components/Table';
import PureComp from './components/PureCompo';
import Parentcomp from './components/Parentcomp';
import Refsdemo from './components/Refsdemo';
import FocusInput from './components/FocusInput';
import FRParentInput from './components/FRParentInput';
import PortalDemo from './components/PortalDemo';
import Hero from './components/Hero';
import ErrorBoundry from './components/ErrorBoundry';
import ClickCounter from './components/ClickCounter';
import Hovercounter from './components/Hovercounter';
import { Component } from 'react';
import ClickCounterTwo from './components/ClickCounterTwo';
import User from './components/User';
import CounterTwo from './components/CounterTwo';
import HoverCounterTwo from './components/HoverCounterTwo';
import ComponentC from './components/ComponentC';
import { UserProvider } from './components/userContext';

class App extends Component {
  
  
  render() {
    
    return (
      <div className="App">
        {/* <Greet name="bruce" heroname="batman">
       <p>this is children</p>
     </Greet>
     <Greet name="clark" heroname="superman">
       <button> action </button>
     </Greet>
     <Welcome name="clark" heroname="superman"/>
     <Welcome name="diana" heroname="wonderwomen"/> */}
     {/* <Greet name="diana" heroname="wonderwomen"/> */}
     {/* <Hello />  */}
     {/* <Message></Message> */}
     {/* <Counter></Counter> */}
     {/* <Welcome name="bruce" heroname="batman" /> */}
     {/* <FunctionClick/>
     <Classclick/> */}
     {/* <Eventbind/> */}
     {/* <Parentcomponent/> */}
     {/* <Usergreeting/> */}
     {/* <Namelist/> */}
     {/* <Stylesheet primary={true}/>
     <Inline/>
     <h1 className='error'>error</h1>
     <h1 className={styles.success}>success</h1> */}
    {/* <Form/> */}
    {/* <LifeycycleA/> */}
    {/* <FragmentDemo /> */}
    {/* <Table /> */}
    {/* <PureComp /> */}
    {/* <Parentcomp /> */}
    {/* <Refsdemo /> */}
    {/* <FocusInput /> */}
    {/* <FRParentInput /> */}
    {/* <PortalDemo /> */}
    {/* <ErrorBoundry>
      <Hero heroName='batman'></Hero>
    </ErrorBoundry>
    <ErrorBoundry>
      <Hero heroName='superman'></Hero>
    </ErrorBoundry>
    <ErrorBoundry>    
      <Hero heroName='joker'></Hero>  
    </ErrorBoundry>   */}
    {/* <ClickCounter />
    <Hovercounter /> */}
    {/* <ClickCounterTwo />
    <Hovercounter/>
    <User render={ (isLoggedIn)=> (
      isLoggedIn ? "sun" : "moon"
    )}/> */}

    {/* <CounterTwo render={(count, incrementor)=> (
      <ClickCounterTwo count={count} incrementor={incrementor} />
    )} 
    />

    <CounterTwo render={(count, incrementor)=> (
      <HoverCounterTwo count={count} incrementor={incrementor} />
    )} 
    /> */}
    {/* <UserProvider value="sun"> */}
      <ComponentC />
    {/* </UserProvider> */}
    
    </div>
    )
  }
}

  export default App;
