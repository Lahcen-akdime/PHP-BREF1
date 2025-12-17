CREATE DATABASE course_sections ;
_________________________________________
CREATE TABLE COURSES (
    id int PRIMARY KEY AUTO_INCREMENT ,
    title varchar(100) NOT NULL , 
    description text NOT NULL ,
    image varchar(100)NOT NULL,
    course_level  ENUM("Débutant","Intermédiaire","Avancé") NOT NULL,
    created_at datetime DEFAULT CURRENT_TIMESTAMP NOT NULL 
    )
_________________________________________
CREATE TABLE SECTIONS (
	id int PRIMARY KEY AUTO_INCREMENT ,
    title varchar(100) NOT NULL ,
    content text NOT NULL ,
    position int ,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP ,
    course_id int NOT NULL ,
    FOREIGN KEY (course_id) REFERENCES courses (id)
    )
__________________________________________
// fake courses table data
INSERT INTO courses (title, description, course_level , image)
VALUES

('Programmation Java Avancée',
 'Approfondissez la programmation orientée objet, les structures de données et les frameworks Java.',
 'Avancé',
 'ressourses/Java_avance.png'),


('Fondamentaux de la Data Science',
 'Découvrez les statistiques, l’analyse de données et l’utilisation de Python pour la data science.',
 'Intermédiaire',
 'ressourses/data_sience.webp'),


('Principes du Design UI/UX',
 'Explorez les principes de design, la création de wireframes et de prototypes.',
 'Débutant',
 'ressourses/PrincipesduDesign.webp'),


('DevOps & Pipeline CI/CD',
 'Automatisez les déploiements avec GitHub Actions, Docker et les pratiques CI/CD.',
 'Avancé',
 'ressourses/devops.webp');
_______________________________________________
// fake sections table data
INSERT INTO sections (title, content, position, course_id)
VALUES
('Introduction à Java Avancé',
 'Rappels sur la POO, les bonnes pratiques et l’architecture des applications Java.',
 1, 1),
('Collections et Génériques',
 'Maîtrise des collections Java, List, Set, Map et l’utilisation des génériques.',
 2, 1),
('Programmation Multithread',
 'Comprendre les threads, la concurrence et la gestion des performances.',
 3, 1),
('Framework Spring Boot',
 'Création d’API REST avec Spring Boot et introduction à JPA.',
 4, 1),
('Introduction à la Data Science',
 'Présentation du métier, des outils et du cycle de vie des données.',
 1, 2),
('Statistiques de base',
 'Moyenne, médiane, variance et interprétation des données.',
 2, 2),
('Analyse de données avec Python',
 'Utilisation de Pandas, NumPy et Matplotlib pour analyser des datasets.',
 3, 2),
('Introduction au Machine Learning',
 'Notions de régression, classification et évaluation des modèles.',
 4, 2),
('Introduction au UI/UX',
 'Différence entre UI et UX et rôle du designer.',
 1, 3),
('Recherche utilisateur',
 'Méthodes de recherche, personas et parcours utilisateur.',
 2, 3),
('Wireframes et Prototypes',
 'Création de wireframes et prototypes avec Figma.',
 3, 3),
('Tests utilisateurs',
 'Tester, analyser les retours et améliorer l’expérience.',
 4, 3),
('Introduction au DevOps',
 'Culture DevOps, collaboration et automatisation.',
 1, 4),
('Docker et Conteneurisation',
 'Création d’images Docker et gestion des conteneurs.',
 2, 4),
('CI/CD avec GitHub Actions',
 'Automatiser les tests et les déploiements.',
 3, 4),
('Déploiement et Monitoring',
 'Surveillance des applications et bonnes pratiques de production.',
 4, 4);
 
 ________________________ PARTIE 2 ________________________________
 CREATE TABLE CLIENT(
    id int PRIMARY KEY AUTO_INCREMENT ,
    name varchar(50) ,
    email varchar(100) UNIQUE,
    password varchar(100)
    ) 