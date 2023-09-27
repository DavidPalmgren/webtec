CREATE TABLE object(
    id INTEGER PRIMARY KEY NOT NULL,
    name TEXT,
    title TEXT,
    data TEXT,
    author TEXT,
    gps TEXT,
    mapImage TEXT,
    image1 TEXT,
    image1Alt TEXT,
    image1Text TEXT,
    image2 TEXT,
    image2Alt TEXT,
    image2Text TEXT
);
CREATE TABLE article
(
    id INTEGER PRIMARY KEY NOT NULL,
    name TEXT UNIQUE NOT NULL,
    title TEXT NOT NULL,
    data TEXT NOT NULL,
    author TEXT NOT NULL,
    gps TEXT,
    mapImage TEXT,
    image1 TEXT,
    image1Alt TEXT,
    image1Text TEXT,
    image2 TEXT,
    image2Alt TEXT,
    image2Text TEXT
);