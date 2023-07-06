import React from "react";

const BookmarkButton = ({IsBookmarked, onClick}) => {
    return (
        <button onClick={onClick}>
            {IsBookmarked ? '💖': '🖤'}
        </button>
    );
};

export default BookmarkButton;