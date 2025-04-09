<style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background-image: url(bg.png);
      color: white;
      line-height: 1.6;
    }

    header {
      background: linear-gradient(135deg, #5d2391, #9264c9);
      color: #fff;
      padding: 3rem 1rem;
      text-align: center;
    }

    header h1 {
      font-size: 2.5rem;
      font-weight: bold;
    }

    header p {
      font-size: 1.2rem;
      margin-top: 0.5rem;
    }

    section {
      padding: 3rem 1rem;
      max-width: 960px;
      margin: auto;
    }

    section h2 {
       background: linear-gradient(135deg, #5d2391, #9264c9);
      margin-bottom: 1.5rem;
      font-size: 1.8rem;
    }

    .services ul {
      list-style-type: none;
      padding-left: 1rem;
    }

    .services li {
      margin-bottom: 0.8rem;
      font-weight: 500;
    }

    .services li::before {
      content: '🔮';
      margin-right: 0.5rem;
    }

    .whatsapp {
      background: #25d366;
      color: #fff;
      padding: 1.5rem;
      text-align: center;
      margin: 3rem 0;
      border-radius: 12px;
      font-size: 1.2rem;
    }

    .whatsapp a {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
    }

    .testimonials, .gallery {
      background: #f1e6f8;
      padding: 2rem;
      border-radius: 14px;
      margin-top: 2rem;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }

    .testimonials p {
      margin-bottom: 1rem;
      font-style: italic;
      color: black;
    }

    .gallery-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
      gap: 10px;
    }

    .gallery-grid img {
      width: 100%;
      height: auto;
      border-radius: 8px;
      cursor: pointer;
      transition: transform 0.2s;
    }

    .gallery-grid img:hover {
      transform: scale(1.05);
    }

    .lightbox {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0,0,0,0.8);
      justify-content: center;
      align-items: center;
      z-index: 1000;
    }

    .lightbox img {
      max-width: 90%;
      max-height: 80vh;
      border-radius: 12px;
    }

    .whatsapp-fixed {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background-color: #25d366;
      color: white;
      border-radius: 50%;
      width: 60px;
      height: 60px;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 28px;
      text-decoration: none;
      box-shadow: 0 4px 8px rgba(0,0,0,0.3);
      z-index: 1001;
    }

    footer {
      background: #4b0082;
      color: #fff;
      text-align: center;
      padding: 2rem 1rem;
      margin-top: 2rem;
    }

    @media (max-width: 768px) {
      header h1 {
        font-size: 2rem;
      }

      section h2 {
        font-size: 1.5rem;
      }
    }
  </style>