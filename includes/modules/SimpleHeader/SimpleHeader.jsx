
// External Dependencies
import React, { Component, Fragment } from 'react';

// Internal Dependencies
import './style.css';


class SimpleHeader extends Component {

  static slug = 'simp_simple_header';

  render() {
    return (
      <Fragment>
        <h1 className="simp-simple-header-heading">{this.props.heading}</h1>
        <label className="simp-simple-header-label">{this.props.heading}</label>
        <p className="simp-simple-header-content">
          {this.props.content()}
        </p>
        <p className="simp-simple-header-icon">
          {this.props.icon}
        </p>
      </Fragment>
    );
  }
}

export default SimpleHeader;