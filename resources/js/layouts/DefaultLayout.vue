<template>
  <div class="app-container">
    <nav class="main-nav">
      <div class="nav-content">
        <router-link to="/" class="nav-brand">MS</router-link>
        <div class="nav-links">
          <router-link to="/" class="nav-link">Home</router-link>
          <router-link to="/about" class="nav-link">About</router-link>
          <router-link to="/projects" class="nav-link">Projects</router-link>
        </div>
      </div>
    </nav>

    <main class="main-content">
      <router-view></router-view>
    </main>

    <footer class="main-footer">
      <div class="footer-content">
        <p>&copy; {{ currentYear }} Megan Starrington. All rights reserved.</p>
        <div class="social-links">
          <a href="https://github.com/Megpen97" target="_blank" rel="noopener noreferrer">GitHub</a>
          <a href="https://www.linkedin.com/in/megan-starrington-043996153/" target="_blank" rel="noopener noreferrer">LinkedIn</a>
        </div>
      </div>
    </footer>
  </div>
</template>

<script>
export default {
  name: 'DefaultLayout',
  computed: {
    currentYear() {
      return new Date().getFullYear();
    }
  }
}
</script>

<style scoped>
.app-container {
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  background-color: #FDF6EC;
  color: #ffffff;
}

.main-nav {
  background-color: #B5DBFF;
  backdrop-filter: blur(10px);
  position: fixed;
  width: 100%;
  z-index: 1000;
  padding: 1rem 0;
}

.nav-content {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 2rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.nav-brand {
  font-size: 1.5rem;
  font-weight: bold;
  color: #000;
  text-decoration: none;
  transition: color 0.3s ease;
}

.nav-brand:hover {
  color: #E9967A;
}

.nav-links {
  display: flex;
  gap: 2rem;
}

.nav-link {
  color: #000;
  text-decoration: none;
  font-weight: 500;
  transition: color 0.3s ease;
  position: relative;
}

.nav-link:hover {
  color: #000;
}

.nav-link::after {
  content: '';
  position: absolute;
  width: 0;
  height: 2px;
  bottom: -4px;
  left: 0;
  background-color: #E9967A;
  transition: width 0.3s ease;
}

.nav-link:hover::after {
  width: 100%;
}

.main-content {
  flex: 1;
  padding-top: 5rem;
  width: 100%;
  max-width: 1200px;
  margin: 0 auto;
  padding-left: 2rem;
  padding-right: 2rem;
}

.main-footer {
  background-color: #B5DBFF;
  padding: 2rem 0;
  margin-top: 4rem;
}

.footer-content {
  max-width: 1200px;
  color: #000;
  margin: 0 auto;
  padding: 0 2rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.social-links {
  display: flex;
  gap: 1.5rem;
}

.social-links a {
  color: #000;
  text-decoration: none;
  transition: color 0.3s ease;
}

.social-links a:hover {
  color: #E9967A;
}

@media (max-width: 768px) {
  .nav-content {
    flex-direction: column;
    gap: 1rem;
  }

  .nav-links {
    gap: 1rem;
  }

  .footer-content {
    flex-direction: column;
    gap: 1rem;
    text-align: center;
  }
}
</style> 