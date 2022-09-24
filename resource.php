<?php 
require('header.php');
?>
<div class="container">
    <h1 class="h1-center">
        <b>
            <u>
        Know how to secure your Website.
    </u>
        <b>
    </h1>
    <p>
    <h2 class="h1-center">
        What is a SSL certificate?
    </h2>
    <br>
        An SSL certificate acts as third-party verification for a website’s security. It verifies the strength of the Secure Socket Layer encryption used when a user connects to the site and connects that encryption to the organization or individual that owns and maintains the website. SSL certification and validation are a necessary piece of web security for any business that collects information from its users.
        Different SSL certificates provide different levels of security, depending on the level of protection and security features your website and its users need. You may be familiar with visual elements such as Site Seals, the HTTPS:// protocol appearing in the URL, but there are less-visible functions that help protect your website and visitors.
        No matter what level of security you choose, your users will recognize that your site is safe, and that leads to greater trust in your brand online.
    </p>
    <p>
    <h2 class="h1-center">
        Malware detection?
    </h2>
    <br>
    Malware refers to malicious software perpetrators dispatch to infect individual computers or an entire organization’s network. It exploits target system vulnerabilities, such as a bug in legitimate software (e.g., a browser or web application plugin) that can be hijacked.
    A malware infiltration can be disastrous—consequences include data theft, extortion or the crippling of network systems.
    </p>
    <p>
    <h2 class="h1-center">
        What to do with unwanted root files?
    </h2>
    <br>
    Unwanted files are committed to a repository after updating Lerna to version 3.22.0 (which contains the change added in #2445).
    At least this change does not feel like a minor one, it definitely should be explicitly documented, not only in that PR description.
    Expected Behavior
    If temporary files are generated during build, they should not be committed back to the repository.
    At least this beahviour should not be default, but rather enabled with a switch.
    Current Behavior
    All untracked files are committed by default.
    Possible Solution
    Gitignore all the stuff would work, but it should not be.
    Steps to Reproduce (for bugs)Introduce changes to a package.
    <ul>
        <li>Generate some secrets and/or trash.</li>
        <li>Publish new version with Lerna</li>
        <li>All the secrets and trash are committed to the repository</li>
    </ul>
    </p>
    <p>
    <h2 class="h1-center">
        Malware detection?
    </h2>
    <br>
    Malware refers to malicious software perpetrators dispatch to infect individual computers or an entire organization’s network. It exploits target system vulnerabilities, such as a bug in legitimate software (e.g., a browser or web application plugin) that can be hijacked.
    A malware infiltration can be disastrous—consequences include data theft, extortion or the crippling of network systems.
    </p>
    <p>
    <h2 class="h1-center">
    Firewall ?
    </h2>
    <br>
    Web application attacks prevent important transactions and steal sensitive data. Imperva Web Application Firewall (WAF) stops these attacks with near-zero false positives and a global SOC to ensure your organization is protected from the latest attacks minutes after they are discovered in the wild.


    </p>
</div>
<?php 
require('resource-footer.php');
?>