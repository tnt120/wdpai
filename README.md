# WDPAI - Bookify

## Table of Contents
- [About](#about)
- [Technology Stack](#technology-stack)
- [System Actors](#system-actors)
- [ERD Diagram](#erd-diagram)
- [Screenshots](#screenshots)
- [Requirements](#requirements)
- [Installation](#installation)

## About
Bookify is an application for tracking your reading progress. Users can create an account, browse available books, and categorize them into 'finished', 'currently reading', or 'to be read'. Users can also rate books they've finished on a 0-5 scale. Administrators have the ability to manage books, authors, and genres within the system.

## Technology Stack
- Docker
- PostgreSQL
- PHP
- JavaScript
- HTML5/CSS3

## System Actors
- **Admin:** Manages books, authors, and genres.
- **User:** Browses books and tracks reading progress.

## ERD Diagram
![ERD Diagram](https://github.com/tnt120/wdpai/assets/48412587/56b6d6cf-a994-440f-bce7-c15be7419029)

## Screenshots
- **Login Page:**
  ![Login Page](https://github.com/tnt120/wdpai/assets/48412587/f16e3dcf-1034-4b81-b907-bd0683a5d209)
  ![Login Page - Mobile](https://github.com/tnt120/wdpai/assets/48412587/ddd8f0c4-0d98-4bce-8369-c85674ba9a26)

- **User Main Home:**
  ![User Home](https://github.com/tnt120/wdpai/assets/48412587/e39c3ae0-602c-46f5-9e18-a97d0279a3ad)
  ![User Home - Bookshelf](https://github.com/tnt120/wdpai/assets/48412587/b71c5ef3-5c18-453c-a49a-ceb233e0ecc4)

- **Book Details Page:**
  ![Book Details](https://github.com/tnt120/wdpai/assets/48412587/31a08137-bd56-40b4-84c2-136dabbc87a3)
  ![Book Details - Mobile](https://github.com/tnt120/wdpai/assets/48412587/45b24df2-6b5b-430d-874b-12406d321fa5)

- **User Books Page:**
  ![User Books](https://github.com/tnt120/wdpai/assets/48412587/5b47e21e-1d8a-432d-aeda-194a389b3fb8)
  ![User Books - List](https://github.com/tnt120/wdpai/assets/48412587/dc9ec5b6-6659-4f81-ae41-6a48a72c35b8)

- **Admin Dashboard:**
  ![Admin Dashboard](https://github.com/tnt120/wdpai/assets/48412587/7e0774dd-e2db-46c6-8fb3-f1bfce97b3d6)
  ![Admin Dashboard - Mobile](https://github.com/tnt120/wdpai/assets/48412587/36ea19ae-f7ab-4367-b7c8-b545d51e9238)

- **Manage Authors & Genres:**
  ![Manage Authors](https://github.com/tnt120/wdpai/assets/48412587/40de5ddc-5dc6-49e1-9135-c743c501523b)
  ![Manage Genres](https://github.com/tnt120/wdpai/assets/48412587/8f04d076-d12b-4b8c-95ab-8c00b795192a)

- **Adding Book Page:**
  ![Adding Book](https://github.com/tnt120/wdpai/assets/48412587/25386562-c375-42f9-9dce-a008d39def52)
  ![Adding Book - Mobile](https://github.com/tnt120/wdpai/assets/48412587/f3790712-cc6c-4e0f-87ba-21d3a53b67b1)

## Requirements
- [Docker](https://www.docker.com/) installed on your machine.

## Installation
1. Open a terminal in the main project folder.
2. Run the command: `docker-compose up`.
3. Execute the database file provided: `bookifyDB.sql`.
4. Access the application in a web browser at `localhost:8080`.
