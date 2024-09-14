# QR Code-Based Treasure Hunt Game


## Overview
This web application is a prototype of  a QR code-based treasure hunt game that tracks player scores across multiple game segments. It features QR code scanning for game progression, score management, and player registration. The application includes an API for retrieving player data and generating reports.

## Features
 - Player Registration: Register new players with their name and phone number.
 - Score Tracking: Track and update scores for three different game segments.
 - QR Code Integration: Generate and manage QR codes associated with game codes.
 - Game Status: Display the status of each game segment (played or unplayed).
 - API Endpoints: Provide data in JSON format for player information and game scores.

## Controllers
 - oneController: Manages the score update for the first game segment and redirects to codeController.
 - twoController: Manages the score update for the second game segment and redirects to codeController.
 - threeController: Manages the score update for the third game segment and redirects to codeController.
 - codeController: Handles game flow, QR code management, and redirection based on game status and player codes.
 - apiController: Provides API endpoints for listing player data and generating JSON reports.
 - registerController: Handles player registration and redirects to the QR code scanning view.
