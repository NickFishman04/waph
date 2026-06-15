# waph

Public Respository for Web Application Programming and Hacking course - Dr. Phu Phung

# WAPH-Web Application Programming and Hacking

## Instructor: Dr. Phu Phung

## Student

**Name**: Nick Fishman

**Email**: [fishmane@mail.uc.edu](fishmane@mail.uc.edu)

**Short-bio**: Nick Fishman is an electrical engineering student with a specific interest in hardware and circuits. 

![Nick's headshot](headshot.jpg)

## Repository Information

Respository's URL: [https://github.com/NickFishman04/waph.git](https://github.com/NickFishman04/waph.git)

This is a private repository for Nick Fishman to store all code from the course. The organization of this repository is as follows.

## Individual Project 1

### Overview

For this project I built and deployed a profile website on GitHub Pages with my resume info and a second page covering the WAPH course and its labs/hackathons/projects. It builds on Lab 2, using Bootstrap, jQuery, two public APIs, a digital and analog clock, a show/hide email feature, and local storage to track returning visitors.

### General Requirements

#### Profile Page (index.html)

The homepage uses Bootstrap and includes my headshot, contact info, education, work experience, and skills list, along with a link to the WAPH course page.

#### WAPH Course Page (waph.html)

This page gives a short overview of the course and lists the labs, hackathons, and projects, with a link back to the homepage.

### Non-Technical Requirements

#### CSS Framework

Both pages use Bootstrap via CDN for layout and styling.

#### Page Tracker

Added a page tracker to track visitor traffic.

### Technical Requirements

#### JavaScript/jQuery

* **Digital Clock**: Updates every second using jQuery and `setInterval`.
* **Analog Clock**: Drawn with Canvas, redrawing the hands each second.
* **Show/Hide Email**: Toggled with a button using jQuery.
* **Show/Hide Bio**: A second button reveals a bio with `.slideToggle()`.
* **Click Me! Button (extra feature)**: Opens a rick roll.

#### Public API Integration

* **jokeAPI**: Pulls a random joke on load and every 60 seconds, with a disclaimer about third-party content.
* **Dog CEO API**: Pulls a random dog image, also with a disclaimer.

#### Visitor Tracking with Local Storage

Uses local storage to show a first-visit message or a "welcome back" message with the last visit's date/time, updating it on each load.

### Labs 

[Hands-on exercises in lectures](labs) 

  - [Lab 0](labs/lab0): Development Environment Setup 
  - [Lab 1](labs/lab1): Foundations of the Web
  - [Lab 2](labs/lab2): Front-end Web Development

### Hackations

- [Hackathon 1](hackathons/hackathon1): Cross-site Scripting Attacks and Defenses 

### Individual Projects

- [Individual Project 1](projects/iproject1): Professional Profile Website and API Integration

### Team Project
