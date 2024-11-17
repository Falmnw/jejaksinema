import { useState } from 'react';
import './App.css';
import rumah from './rumah.svg';
import logouser from './logouser.svg';

function App() {
    const [formData, setFormData] = useState({
        judul: '',
        ulasan: '',
        rating: '',
        poster: null,
    });

    const handleChange = (e) => {
        const { name, value } = e.target;
        setFormData((prev) => ({
            ...prev,
            [name]: value,
        }));
    };

    const handleFileChange = (e) => {
        setFormData((prev) => ({
            ...prev,
            poster: e.target.files[0],
        }));
    };

    const handleSubmit = async (e) => {
        e.preventDefault();
        const form = new FormData();
        form.append('judul', formData.judul);
        form.append('ulasan', formData.ulasan);
        form.append('rating', formData.rating);
        form.append('poster', formData.poster);

        try {
            const response = await fetch('http://127.0.0.1:8000/addReview', {
                method: 'POST',
                body: form,
            });

            if (response.ok) {
                alert('Review successfully added!');
                setFormData({ judul: '', ulasan: '', rating: '', poster: null });
            } else {
                const error = await response.json();
                alert('Failed to add review: ' + error.message);
            }
        } catch (error) {
            console.error(error);
            alert('An error occurred');
        }
    };

    return (
        <div className="App">
            <div className="sidebar">
                <button className="nav-btn home-btn">
                    <img src={rumah} className="rumah" alt="Home" />
                </button>
                <button className="nav-btn profile-btn">
                    <img src={logouser} className="logouser" alt="Profile" />
                </button>
            </div>
            <div className="form-container">
                <h1>Add a Review</h1>
                <form className="review-form" onSubmit={handleSubmit}>
                    <label>
                        Title
                        <input
                            type="text"
                            name="judul"
                            value={formData.judul}
                            className="form-input"
                            onChange={handleChange}
                            required
                        />
                    </label>
                    <label>
                        Review
                        <textarea
                            name="ulasan"
                            value={formData.ulasan}
                            className="form-textarea"
                            onChange={handleChange}
                            required
                        ></textarea>
                    </label>
                    <label>
                        Rating
                        <div className="rating-container">
                            <input
                                type="number"
                                name="rating"
                                value={formData.rating}
                                className="rating-input"
                                max="10"
                                min="0"
                                onChange={handleChange}
                                required
                            />
                            <span>/10</span>
                        </div>
                    </label>
                    <label>
                        Add Poster
                        <input
                            type="file"
                            name="poster"
                            className="form-input"
                            onChange={handleFileChange}
                            required
                        />
                    </label>
                    <button type="submit" className="submit-btn">
                        Post
                    </button>
                </form>
            </div>
        </div>
    );
}

export default App;
