import React from 'react';
import './App.css';
import rumah from './rumah.svg';
import logouser from './logouser.svg';
import poster from './laskar-pelangi.jpg';

function App() {
    return (
        <div className="App">
            <div className="sidebar">
                <button className="nav-btn">
                    <img src={rumah} className="rumah" alt="Home" />
                </button>
                <button className="nav-btn">
                    <img src={logouser} className="logouser" alt="User Profile" />
                </button>
            </div>
            <div className="content">
                <h1>Laskar Pelangi</h1>
                <div className="review-card">
                    <img src={poster} alt="Laskar Pelangi" className="movie-poster" />
                    <p>
                        Have just seen the European Premiere at the Berlin Film Festival. This was the
                        first Indonesian film I had ever seen and did not know what to expect. I was not
                        disappointed...
                    </p>
                    <div className="rating-bar">
                        {[...Array(6)].map((_, idx) => (
                            <span key={idx} className="rating-block" />
                        ))}
                        {[...Array(4)].map((_, idx) => (
                            <span key={idx} className="rating-block" style={{ backgroundColor: 'white' }} />
                        ))}
                        <span>60%</span>
                    </div>
                    <div className="like-dislike">
                        <span>👍 120</span>
                        <span>👎 28</span>
                    </div>
                </div>
            </div>
        </div>
    );
}


export default App;
