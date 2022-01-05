import React from 'react';
import { Link, NavLink } from 'react-router-dom';

function MainNavbar(props) {
  return (
    <nav className="navbar navbar-expand-sm navbar-light bg-warning">
      <section className="container">
        <a className="navbar-brand" href="#">
          React Hash Navbar
        </a>

        <div className="collapse navbar-collapse" id="navbarNav">
          <ul className="navbar-nav">
            <li className="nav-item">
              <NavLink to={'/page1'} className="nav-link">
                Page 1
              </NavLink>
            </li>
            <li className="nav-item">
              <NavLink to={'/page2'} className="nav-link">
                Page 2
              </NavLink>
            </li>
          </ul>
        </div>
      </section>
    </nav>
  );
}

export default MainNavbar;
