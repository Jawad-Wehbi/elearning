import React from "react";

const NavigationBar = ({ task, onDelete, onToggle }) => {
    return (

    <>
        <nav className="navbar">
            <img className="logoImg" src="src/components/Assets/elearning-logo.jpg" alt="E-Learning"/>
        </nav>
        <ul className="topnav">
        <li><div className="homeLink">Home</div></li>
        <li><div className="favoritesLink">Favorites</div></li>
        <li><div className="chatLink">Chats</div></li>
        <li className="right"><div className="userprofileLink">Username</div></li>
        </ul>
    </>
    )};

export default NavigationBar;