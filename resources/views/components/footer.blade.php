<footer>

{{ $slot }}
        <br />
        <p>© 2023 QWORDS. VIX Project-based internship.</p>
      </footer>
<style>
    

footer{ 
  padding: 40px;
    background-color: var(--accent-light);
    min-height: 300px;
    width: 100%;
    color: var(--black);
    font-family: "Mukta", sans-serif;
    text-align: left;
    display: flex;
    justify-content: center;
    align-content: center;
    flex-direction: column;

}

footer ul li {
    height: unset;
    width: auto;
    line-height: unset;
    padding: 0;
    margin: 0;
}

</style>

