*, *::before, *::after {
  margin: 0;
  padding: 0;
}

html {
  font-size: 62.5%;
  scroll-behavior: smooth;
}

body {
  min-height: 100vh;
  background: #eee;
  font-family: "Poppins", sans-serif;
  font-size: 2rem;
}

.header {
  background: rgba(255, 255, 255, 0.5);
  height: 10rem;
  display: flex;
  align-items: center;
  padding: 1rem;
  justify-content: space-between;
  box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px;
}
.header__logo {
  width: 15rem;
  height: 7.5rem;
}
.header__logo--img {
  width: 100%;
  height: 100%;
  object-fit: contain;
}

.main {
  min-height: 80vh;
  width: 100%;
}
.main__list {
  max-width: 100%;
  height: 100%;
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  cursor: pointer;
}
.main__list--item {
  position: relative;
  height: 83vh;
  width: 34vw;
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 1;
}
.main__list--button {
  font-size: 150%;
  border: none;
  background: none;
  font-weight: bold;
}
.main__list--img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  z-index: 0;
  opacity: 0.1;
  transition: 0.4s;
  border-radius: 0.25rem;
}
.main__list--img:hover {
  opacity: 1;
  transform: scale(98%);
}

.footer {
  background: rgba(255, 255, 255, 0.5);
  height: 10rem;
  display: flex;
  justify-content: flex-end;
  align-items: center;
  padding-right: 1rem;
  opacity: 0.7;
}

.projectieImg {
  width: 100%;
  height: 98.8vh;
  object-fit: cover;
  position: relative;
}

.imga {
  position: absolute;
  cursor: default;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
}

.form {
  margin: 1rem;
}
.form__inputnaam {
  border: none;
  background: none;
  outline: none;
  border-bottom: 2px solid;
  transition: 0.2s;
  padding-bottom: 0.25rem;
}
.form__inputnaam:focus {
  border-bottom: 3.5px solid;
}

.checkboxes {
  display: inline;
  margin: 0.5rem;
}
.checkboxes__input {
  margin-left: 0.75rem;
  margin: 0.5rem;
  cursor: pointer;
}
.checkboxes__label {
  cursor: pointer;
}

/*# sourceMappingURL=style.cs.map */
