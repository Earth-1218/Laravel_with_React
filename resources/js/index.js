import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import {BrowserRouter as Router} from "react-router-dom";
import Header from './Components/Header';
import Footer from './Components/Footer';

class App extends Component{
render(){
        return(
            <div className="Application">
                <Router>
                    <Header/>
                </Router>
            </div>

        );
}

};

class AppFooter extends Component {
    render() {
        return (
            <div className="ApplicationFooter">
                <Router>
                    <Footer/>
                </Router>
            </div>

        );
    }

};


export default App;

export {AppFooter};


if (document.getElementById('react-js-content')) {
    ReactDOM.render(<App/>, document.getElementById('react-js-content'));
}

if (document.getElementById('react-js-footer')) {
    ReactDOM.render(<AppFooter/>, document.getElementById('react-js-footer'));
}
