<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Adventure Game - Find a Way Out</title>
  <!-- Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body, html {
      height: 100%;
      background: linear-gradient(135deg, #434343 0%, #000000 100%);
      color: #f8f9fa;
    }
    .game-container {
      max-width: 600px;
      margin: 20px auto;
      background-color: #222;
      border-radius: 15px;
      box-shadow: 0 0 30px #00ffc8cc;
      padding: 25px;
      min-height: 520px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .title {
      font-weight: 700;
      font-size: 2rem;
      text-align: center;
      margin-bottom: 15px;
      color: #00ffc8;
      text-shadow: 0 0 6px #00e5b9;
    }
    .story-text {
      background: #121212;
      border-radius: 10px;
      padding: 15px;
      height: 150px;
      overflow-y: auto;
      color: #aadede;
      box-shadow: inset 0 0 10px #00796b;
      margin-bottom: 20px;
    }
    .enemy-section {
      text-align: center;
      margin-bottom: 20px;
    }
    .enemy-name {
      font-size: 1.3rem;
      font-weight: 700;
      margin-bottom: 10px;
      color: #ff4444;
      text-shadow: 0 0 8px #ff3333;
    }
    .enemy-image {
      height: 120px;
      margin-bottom: 10px;
    }
    .question-section {
      background: #0b3f3f;
      border-radius: 12px;
      padding: 15px;
      margin-bottom: 20px;
      box-shadow: inset 0 0 15px #004d4d;
      color: #cce5e5;
    }
    .answers .btn {
      margin-top: 8px;
      width: 100%;
      font-weight: 600;
      letter-spacing: 0.05em;
      text-transform: uppercase;
      box-shadow: 0 0 8px #00e5b9;
      border: none;
      background: #00796b;
      transition: background-color 0.3s ease;
    }
    .answers .btn:hover:not(:disabled) {
      background: #00bfa5;
      color: #000;
    }
    .answers .btn:disabled {
      background: #004d4d;
      color: #666;
      box-shadow: none;
    }
    .status-bar {
      background: #004d4d;
      border-radius: 12px;
      text-align: center;
      padding: 8px 0;
      font-weight: 700;
      letter-spacing: 0.06em;
      font-size: 1.1rem;
      margin-top: auto;
      box-shadow: inset 0 0 15px #00796b;
      color: #aadede;
    }
    .btn-restart {
      margin-top: 15px;
      background: #ff4444;
      border: none;
      width: 100%;
      font-weight: 700;
    }
    .btn-restart:hover {
      background: #ff2222;
    }
    /* Scrollbar style for story text */
    .story-text::-webkit-scrollbar {
      width: 8px;
    }
    .story-text::-webkit-scrollbar-track {
      background: #0b3f3f;
      border-radius: 10px;
    }
    .story-text::-webkit-scrollbar-thumb {
      background: #00bfa5;
      border-radius: 10px;
    }
    @media (max-width: 576px) {
      .game-container {
        margin: 10px 15px;
        padding: 20px 18px;
      }
      .title {
        font-size: 1.6rem;
      }
      .story-text {
        height: 130px;
      }
      .enemy-image {
        height: 100px;
      }
    }
  </style>
</head>
<body>

  <div class="game-container shadow-lg">
    <h1 class="title">Escape Adventure</h1>

    <div class="story-text" id="storyText" aria-live="polite" aria-atomic="true">
      Welcome! You find yourself trapped in a dark maze.
      Your goal is to find a way out.
      Beware! Enemies will block your path. Defeat them by answering their questions correctly.
      Good luck!
    </div>

    <div class="enemy-section" id="enemySection" aria-live="polite" aria-atomic="true">
      <!-- Enemy info goes here -->
    </div>

    <div class="question-section" id="questionSection" hidden>
      <div id="questionText" class="mb-3"></div>
      <div class="answers" id="answersContainer" role="list">
        <!-- Answer buttons inserted dynamically -->
      </div>
    </div>

    <div class="status-bar" id="statusBar" aria-live="polite" aria-atomic="true">
      Enemies defeated: 0 / 5
    </div>

    <button type="button" class="btn btn-danger btn-restart" id="restartBtn" aria-label="Restart Game" hidden>Restart Game</button>
  </div>

  <!-- Bootstrap JS Bundle CDN (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    (() => {
      // Game data
      const enemies = [
        {
          name: 'Goblin Grunt',
          img: 'https://i.ibb.co/fDDDR77/goblin.png',
          question: 'What is the capital of France?',
          answers: ['Paris', 'London', 'Rome', 'Berlin'],
          correctIndex: 0,
          story: 'A Goblin blocks your path, eyes glowing red.'
        },
        {
          name: 'Dark Sorcerer',
          img: 'https://i.ibb.co/7vQm60N/sorcerer.png',
          question: 'Which planet is known as the Red Planet?',
          answers: ['Earth', 'Mars', 'Jupiter', 'Saturn'],
          correctIndex: 1,
          story: 'A Dark Sorcerer challenges your knowledge of the stars.'
        },
        {
          name: 'Skeleton Warrior',
          img: 'https://i.ibb.co/1T4BrZz/skeleton.png',
          question: 'What does HTML stand for?',
          answers: [
            'Hyper Trainer Marking Language',
            'Hyper Text Markup Language',
            'Hyperlinks and Text Markup Language',
            'Home Tool Markup Language'
          ],
          correctIndex: 1,
          story: 'A rattling Skeleton Warrior demands an answer.'
        },
        {
          name: 'Enchanted Troll',
          img: 'https://i.ibb.co/hyf8rzQ/troll.png',
          question: 'Solve this math: 15 + 6 = ?',
          answers: ['21', '19', '20', '18'],
          correctIndex: 0,
          story: 'An Enchanted Troll blocks the exit gate.'
        },
        {
          name: 'Shadow Wraith',
          img: 'https://i.ibb.co/4jRHFcZ/wraith.png',
          question: 'Which is the largest ocean on Earth?',
          answers: ['Atlantic Ocean', 'Indian Ocean', 'Arctic Ocean', 'Pacific Ocean'],
          correctIndex: 3,
          story: 'A shadowy Wraith guards the way out.'
        }
      ];

      let currentEnemyIndex = 0;
      let enemiesDefeated = 0;

      // DOM references
      const storyText = document.getElementById('storyText');
      const enemySection = document.getElementById('enemySection');
      const questionSection = document.getElementById('questionSection');
      const questionText = document.getElementById('questionText');
      const answersContainer = document.getElementById('answersContainer');
      const statusBar = document.getElementById('statusBar');
      const restartBtn = document.getElementById('restartBtn');

      // Initialize game status bar
      function updateStatus() {
        statusBar.textContent = `Enemies defeated: ${enemiesDefeated} / ${enemies.length}`;
      }

      // Show enemy and question
      function showEnemy(index) {
        const enemy = enemies[index];
        enemySection.innerHTML = `
          <img src="${enemy.img}" alt="${enemy.name}" class="enemy-image rounded mx-auto d-block" />
          <div class="enemy-name">${enemy.name}</div>
          <div class="enemy-story fst-italic text-warning">${enemy.story}</div>
        `;
        questionText.textContent = enemy.question;

        answersContainer.innerHTML = '';
        enemy.answers.forEach((ans, idx) => {
          const btn = document.createElement('button');
          btn.type = 'button';
          btn.className = 'btn btn-outline-info';
          btn.textContent = ans;
          btn.setAttribute('role', 'listitem');
          btn.onclick = () => checkAnswer(idx);
          answersContainer.appendChild(btn);
        });

        questionSection.hidden = false;
      }

      // Check player's answer
      function checkAnswer(selectedIndex) {
        const enemy = enemies[currentEnemyIndex];
        const buttons = answersContainer.querySelectorAll('button');
        buttons.forEach(btn => btn.disabled = true);

        if (selectedIndex === enemy.correctIndex) {
          enemiesDefeated++;
          storyText.textContent = `You defeated the ${enemy.name}! Keep going...`;
          currentEnemyIndex++;

          updateStatus();

          if (currentEnemyIndex >= enemies.length) {
            // Player wins
            storyText.textContent = "Congratulations! You found your way out! The maze is defeated.";
            questionSection.hidden = true;
            enemySection.innerHTML = `<div class="text-success fw-bold fs-3 mt-4">🎉 YOU ESCAPED! 🎉</div>`;
            restartBtn.hidden = false;
          } else {
            setTimeout(() => {
              showEnemy(currentEnemyIndex);
              storyText.textContent = "A new enemy appears! Prepare to fight!";
            }, 1800);
          }
        } else {
          storyText.textContent = `Wrong answer! The ${enemy.name} dealt you damage. Try again!`;
          buttons.forEach(btn => btn.disabled = false);
        }
      }

      // Reset game
      function resetGame() {
        currentEnemyIndex = 0;
        enemiesDefeated = 0;
        updateStatus();
        restartBtn.hidden = true;
        storyText.textContent = "Welcome! You find yourself trapped in a dark maze. Your goal is to find a way out. Enemies will block your path. Defeat them by answering their questions correctly. Good luck!";
        showEnemy(currentEnemyIndex);
      }

      // Event listeners
      restartBtn.addEventListener('click', resetGame);

      // Start game on load
      window.onload = () => {
        updateStatus();
        showEnemy(currentEnemyIndex);
      };
    })();
  </script>
</body>
</html>

