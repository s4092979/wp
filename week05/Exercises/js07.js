var book = {
    title: "Percy Jackson and the Lightning Thief",
    author: "Rick Riordan",
    genre: "Fantasy",
    year: 2005,
    rating: 5
}

for (property in book) {
    console.log(property + ": " + book[property])
}