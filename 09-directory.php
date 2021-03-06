<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="generator" content="HTML Tidy for HTML5 for Windows version 5.4.0">
    <title>ARIA directory role example</title>
		<?php include("includes/common-head-tags.php"); ?>
    <link rel="stylesheet" type="text/css" href="css/directory.css" />

    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
</head>

<body>
    <?php include("includes/example-header.php"); ?>

    <main>

        <aside class="notes">

            <p>Authors
                <em class="rfc2119" title="SHOULD">SHOULD</em> use this
                <a href="#dfn-role" class="internalDFN" data-link-type="dfn">role</a> for a static table of contents, whether linked or unlinked. This includes tables of contents built
                with lists, including nested lists. Dynamic tables of contents, however, might use a
                <a href="#tree" class="role-reference">
                    <code>tree</code>
                </a> role instead.</p>
        </aside>


        <h1>ARIA directory role example</h1>

        <p>A list of references to members of a group, such as a static table of contents.</p>



        <h2>Native HTML ul/li tree</h2>

        <!-- 
        Copypasta from the Wikipedia article on the Soviet Union
        https://en.wikipedia.org/wiki/Soviet_Union
    -->
        <div id="toc" class="toc">
            <div id="toctitle" dir="ltr" lang="en">
                <h3>Table of Contents</h3>
            </div>
            <ul>
                <li class="toclevel-1 tocsection-1">
                    <a href="#Name">
                        <span class="tocnumber">1</span>
                        <span class="toctext">Name</span>
                    </a>
                </li>
                <li class="toclevel-1 tocsection-2">
                    <a href="#Geography,_climate_and_environment">
                        <span class="tocnumber">2</span>
                        <span class="toctext">Geography, climate and environment</span>
                    </a>
                </li>
                <li class="toclevel-1 tocsection-3">
                    <a href="#History">
                        <span class="tocnumber">3</span>
                        <span class="toctext">History</span>
                    </a>
                    <ul>
                        <li class="toclevel-2 tocsection-4">
                            <a href="#Revolution_and_foundation">
                                <span class="tocnumber">3.1</span>
                                <span class="toctext">Revolution and foundation</span>
                            </a>
                        </li>
                        <li class="toclevel-2 tocsection-5">
                            <a href="#Unification_of_republics">
                                <span class="tocnumber">3.2</span>
                                <span class="toctext">Unification of republics</span>
                            </a>
                        </li>
                        <li class="toclevel-2 tocsection-6">
                            <a href="#Stalin_era">
                                <span class="tocnumber">3.3</span>
                                <span class="toctext">Stalin era</span>
                            </a>
                            <ul>
                                <li class="toclevel-3 tocsection-7">
                                    <a href="#1930s">
                                        <span class="tocnumber">3.3.1</span>
                                        <span class="toctext">1930s</span>
                                    </a>
                                </li>
                                <li class="toclevel-3 tocsection-8">
                                    <a href="#World_War_II">
                                        <span class="tocnumber">3.3.2</span>
                                        <span class="toctext">World War II</span>
                                    </a>
                                </li>
                                <li class="toclevel-3 tocsection-9">
                                    <a href="#Cold_War">
                                        <span class="tocnumber">3.3.3</span>
                                        <span class="toctext">Cold War</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="toclevel-2 tocsection-10">
                            <a href="#Khrushchev_era">
                                <span class="tocnumber">3.4</span>
                                <span class="toctext">Khrushchev era</span>
                            </a>
                        </li>
                        <li class="toclevel-2 tocsection-11">
                            <a href="#Era_of_Stagnation">
                                <span class="tocnumber">3.5</span>
                                <span class="toctext">Era of Stagnation</span>
                            </a>
                        </li>
                        <li class="toclevel-2 tocsection-12">
                            <a href="#Gorbachev_era">
                                <span class="tocnumber">3.6</span>
                                <span class="toctext">Gorbachev era</span>
                            </a>
                        </li>
                        <li class="toclevel-2 tocsection-13">
                            <a href="#Dissolution">
                                <span class="tocnumber">3.7</span>
                                <span class="toctext">Dissolution</span>
                            </a>
                            <ul>
                                <li class="toclevel-3 tocsection-14">
                                    <a href="#Post-Soviet_states">
                                        <span class="tocnumber">3.7.1</span>
                                        <span class="toctext">Post-Soviet states</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="toclevel-1 tocsection-15">
                    <a href="#Foreign_affairs">
                        <span class="tocnumber">4</span>
                        <span class="toctext">Foreign affairs</span>
                    </a>
                    <ul>
                        <li class="toclevel-2 tocsection-16">
                            <a href="#Organizations">
                                <span class="tocnumber">4.1</span>
                                <span class="toctext">Organizations</span>
                            </a>
                        </li>
                        <li class="toclevel-2 tocsection-17">
                            <a href="#Early_Soviet_foreign_policies_(1919–1939)">
                                <span class="tocnumber">4.2</span>
                                <span class="toctext">Early Soviet foreign policies (1919–1939)</span>
                            </a>
                        </li>
                        <li class="toclevel-2 tocsection-18">
                            <a href="#World_War_II_era_(1939–1945)">
                                <span class="tocnumber">4.3</span>
                                <span class="toctext">World War II era (1939–1945)</span>
                            </a>
                        </li>
                        <li class="toclevel-2 tocsection-19">
                            <a href="#Cold_War_era_(1945–1991)">
                                <span class="tocnumber">4.4</span>
                                <span class="toctext">Cold War era (1945–1991)</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="toclevel-1 tocsection-20">
                    <a href="#Politics">
                        <span class="tocnumber">5</span>
                        <span class="toctext">Politics</span>
                    </a>
                    <ul>
                        <li class="toclevel-2 tocsection-21">
                            <a href="#Communist_Party">
                                <span class="tocnumber">5.1</span>
                                <span class="toctext">Communist Party</span>
                            </a>
                        </li>
                        <li class="toclevel-2 tocsection-22">
                            <a href="#Government">
                                <span class="tocnumber">5.2</span>
                                <span class="toctext">Government</span>
                            </a>
                        </li>
                        <li class="toclevel-2 tocsection-23">
                            <a href="#Separation_of_power_and_reform">
                                <span class="tocnumber">5.3</span>
                                <span class="toctext">Separation of power and reform</span>
                            </a>
                        </li>
                        <li class="toclevel-2 tocsection-24">
                            <a href="#Judicial_system">
                                <span class="tocnumber">5.4</span>
                                <span class="toctext">Judicial system</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="toclevel-1 tocsection-25">
                    <a href="#Administrative_divisions">
                        <span class="tocnumber">6</span>
                        <span class="toctext">Administrative divisions</span>
                    </a>
                </li>
                <li class="toclevel-1 tocsection-26">
                    <a href="#Economy">
                        <span class="tocnumber">7</span>
                        <span class="toctext">Economy</span>
                    </a>
                    <ul>
                        <li class="toclevel-2 tocsection-27">
                            <a href="#Energy">
                                <span class="tocnumber">7.1</span>
                                <span class="toctext">Energy</span>
                            </a>
                        </li>
                        <li class="toclevel-2 tocsection-28">
                            <a href="#Science_and_technology">
                                <span class="tocnumber">7.2</span>
                                <span class="toctext">Science and technology</span>
                            </a>
                        </li>
                        <li class="toclevel-2 tocsection-29">
                            <a href="#Transport">
                                <span class="tocnumber">7.3</span>
                                <span class="toctext">Transport</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="toclevel-1 tocsection-30">
                    <a href="#Demographics">
                        <span class="tocnumber">8</span>
                        <span class="toctext">Demographics</span>
                    </a>
                    <ul>
                        <li class="toclevel-2 tocsection-31">
                            <a href="#Education">
                                <span class="tocnumber">8.1</span>
                                <span class="toctext">Education</span>
                            </a>
                        </li>
                        <li class="toclevel-2 tocsection-32">
                            <a href="#Ethnic_groups">
                                <span class="tocnumber">8.2</span>
                                <span class="toctext">Ethnic groups</span>
                            </a>
                        </li>
                        <li class="toclevel-2 tocsection-33">
                            <a href="#Health">
                                <span class="tocnumber">8.3</span>
                                <span class="toctext">Health</span>
                            </a>
                        </li>
                        <li class="toclevel-2 tocsection-34">
                            <a href="#Language">
                                <span class="tocnumber">8.4</span>
                                <span class="toctext">Language</span>
                            </a>
                        </li>
                        <li class="toclevel-2 tocsection-35">
                            <a href="#Religion">
                                <span class="tocnumber">8.5</span>
                                <span class="toctext">Religion</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="toclevel-1 tocsection-36">
                    <a href="#Military">
                        <span class="tocnumber">9</span>
                        <span class="toctext">Military</span>
                    </a>
                </li>
                <li class="toclevel-1 tocsection-37">
                    <a href="#Legacy">
                        <span class="tocnumber">10</span>
                        <span class="toctext">Legacy</span>
                    </a>
                </li>
                <li class="toclevel-1 tocsection-38">
                    <a href="#Culture">
                        <span class="tocnumber">11</span>
                        <span class="toctext">Culture</span>
                    </a>
                </li>
                <li class="toclevel-1 tocsection-39">
                    <a href="#Sport">
                        <span class="tocnumber">12</span>
                        <span class="toctext">Sport</span>
                    </a>
                    <ul>
                        <li class="toclevel-2 tocsection-40">
                            <a href="#Amateurism">
                                <span class="tocnumber">12.1</span>
                                <span class="toctext">Amateurism</span>
                            </a>
                        </li>
                        <li class="toclevel-2 tocsection-41">
                            <a href="#Doping">
                                <span class="tocnumber">12.2</span>
                                <span class="toctext">Doping</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="toclevel-1 tocsection-42">
                    <a href="#See_also">
                        <span class="tocnumber">13</span>
                        <span class="toctext">See also</span>
                    </a>
                    <ul>
                        <li class="toclevel-2 tocsection-43">
                            <a href="#Conflicts">
                                <span class="tocnumber">13.1</span>
                                <span class="toctext">Conflicts</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="toclevel-1 tocsection-44">
                    <a href="#References">
                        <span class="tocnumber">14</span>
                        <span class="toctext">References</span>
                    </a>
                </li>
                <li class="toclevel-1 tocsection-45">
                    <a href="#Notes">
                        <span class="tocnumber">15</span>
                        <span class="toctext">Notes</span>
                    </a>
                </li>
                <li class="toclevel-1 tocsection-46">
                    <a href="#Bibliography">
                        <span class="tocnumber">16</span>
                        <span class="toctext">Bibliography</span>
                    </a>
                </li>
                <li class="toclevel-1 tocsection-47">
                    <a href="#Further_reading">
                        <span class="tocnumber">17</span>
                        <span class="toctext">Further reading</span>
                    </a>
                    <ul>
                        <li class="toclevel-2 tocsection-48">
                            <a href="#Surveys">
                                <span class="tocnumber">17.1</span>
                                <span class="toctext">Surveys</span>
                            </a>
                        </li>
                        <li class="toclevel-2 tocsection-49">
                            <a href="#Lenin_and_Leninism">
                                <span class="tocnumber">17.2</span>
                                <span class="toctext">Lenin and Leninism</span>
                            </a>
                        </li>
                        <li class="toclevel-2 tocsection-50">
                            <a href="#Stalin_and_Stalinism">
                                <span class="tocnumber">17.3</span>
                                <span class="toctext">Stalin and Stalinism</span>
                            </a>
                        </li>
                        <li class="toclevel-2 tocsection-51">
                            <a href="#World_War_II_2">
                                <span class="tocnumber">17.4</span>
                                <span class="toctext">World War II</span>
                            </a>
                        </li>
                        <li class="toclevel-2 tocsection-52">
                            <a href="#Cold_War_2">
                                <span class="tocnumber">17.5</span>
                                <span class="toctext">Cold War</span>
                            </a>
                        </li>
                        <li class="toclevel-2 tocsection-53">
                            <a href="#Collapse">
                                <span class="tocnumber">17.6</span>
                                <span class="toctext">Collapse</span>
                            </a>
                        </li>
                        <li class="toclevel-2 tocsection-54">
                            <a href="#Specialty_studies">
                                <span class="tocnumber">17.7</span>
                                <span class="toctext">Specialty studies</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="toclevel-1 tocsection-55">
                    <a href="#External_links">
                        <span class="tocnumber">18</span>
                        <span class="toctext">External links</span>
                    </a>
                </li>
            </ul>
        </div>


        <h2>ARIA directory/listitem role equivalent</h2>

        <!-- 
        Copypasta from the Wikipedia article on the Soviet Union
        https://en.wikipedia.org/wiki/Soviet_Union
    -->
        <div id="toc" class="toc">
            <div id="toctitle" dir="ltr" lang="en">
                <h3>Table of Contents</h3>
            </div>
            <div role="directory">
                <div role="listitem" class="toclevel-1 tocsection-1">
                    <a href="#Name">
                        <span class="tocnumber">1</span>
                        <span class="toctext">Name</span>
                    </a>
                </div>
                <div role="listitem" class="toclevel-1 tocsection-2">
                    <a href="#Geography,_climate_and_environment">
                        <span class="tocnumber">2</span>
                        <span class="toctext">Geography, climate and environment</span>
                    </a>
                </div>
                <div role="listitem" class="toclevel-1 tocsection-3">
                    <a href="#History">
                        <span class="tocnumber">3</span>
                        <span class="toctext">History</span>
                    </a>
                    <div role="directory">
                        <div role="listitem" class="toclevel-2 tocsection-4">
                            <a href="#Revolution_and_foundation">
                                <span class="tocnumber">3.1</span>
                                <span class="toctext">Revolution and foundation</span>
                            </a>
                        </div>
                        <div role="listitem" class="toclevel-2 tocsection-5">
                            <a href="#Unification_of_republics">
                                <span class="tocnumber">3.2</span>
                                <span class="toctext">Unification of republics</span>
                            </a>
                        </div>
                        <div role="listitem" class="toclevel-2 tocsection-6">
                            <a href="#Stalin_era">
                                <span class="tocnumber">3.3</span>
                                <span class="toctext">Stalin era</span>
                            </a>
                            <div role="directory">
                                <div role="listitem" class="toclevel-3 tocsection-7">
                                    <a href="#1930s">
                                        <span class="tocnumber">3.3.1</span>
                                        <span class="toctext">1930s</span>
                                    </a>
                                </div>
                                <div role="listitem" class="toclevel-3 tocsection-8">
                                    <a href="#World_War_II">
                                        <span class="tocnumber">3.3.2</span>
                                        <span class="toctext">World War II</span>
                                    </a>
                                </div>
                                <div role="listitem" class="toclevel-3 tocsection-9">
                                    <a href="#Cold_War">
                                        <span class="tocnumber">3.3.3</span>
                                        <span class="toctext">Cold War</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div role="listitem" class="toclevel-2 tocsection-10">
                            <a href="#Khrushchev_era">
                                <span class="tocnumber">3.4</span>
                                <span class="toctext">Khrushchev era</span>
                            </a>
                        </div>
                        <div role="listitem" class="toclevel-2 tocsection-11">
                            <a href="#Era_of_Stagnation">
                                <span class="tocnumber">3.5</span>
                                <span class="toctext">Era of Stagnation</span>
                            </a>
                        </div>
                        <div role="listitem" class="toclevel-2 tocsection-12">
                            <a href="#Gorbachev_era">
                                <span class="tocnumber">3.6</span>
                                <span class="toctext">Gorbachev era</span>
                            </a>
                        </div>
                        <div role="listitem" class="toclevel-2 tocsection-13">
                            <a href="#Dissolution">
                                <span class="tocnumber">3.7</span>
                                <span class="toctext">Dissolution</span>
                            </a>
                            <div role="directory">
                                <div role="listitem" class="toclevel-3 tocsection-14">
                                    <a href="#Post-Soviet_states">
                                        <span class="tocnumber">3.7.1</span>
                                        <span class="toctext">Post-Soviet states</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="listitem" class="toclevel-1 tocsection-15">
                    <a href="#Foreign_affairs">
                        <span class="tocnumber">4</span>
                        <span class="toctext">Foreign affairs</span>
                    </a>
                    <div role="directory">
                        <div role="listitem" class="toclevel-2 tocsection-16">
                            <a href="#Organizations">
                                <span class="tocnumber">4.1</span>
                                <span class="toctext">Organizations</span>
                            </a>
                        </div>
                        <div role="listitem" class="toclevel-2 tocsection-17">
                            <a href="#Early_Soviet_foreign_policies_(1919–1939)">
                                <span class="tocnumber">4.2</span>
                                <span class="toctext">Early Soviet foreign policies (1919–1939)</span>
                            </a>
                        </div>
                        <div role="listitem" class="toclevel-2 tocsection-18">
                            <a href="#World_War_II_era_(1939–1945)">
                                <span class="tocnumber">4.3</span>
                                <span class="toctext">World War II era (1939–1945)</span>
                            </a>
                        </div>
                        <div role="listitem" class="toclevel-2 tocsection-19">
                            <a href="#Cold_War_era_(1945–1991)">
                                <span class="tocnumber">4.4</span>
                                <span class="toctext">Cold War era (1945–1991)</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div role="listitem" class="toclevel-1 tocsection-20">
                    <a href="#Politics">
                        <span class="tocnumber">5</span>
                        <span class="toctext">Politics</span>
                    </a>
                    <div role="directory">
                        <div role="listitem" class="toclevel-2 tocsection-21">
                            <a href="#Communist_Party">
                                <span class="tocnumber">5.1</span>
                                <span class="toctext">Communist Party</span>
                            </a>
                        </div>
                        <div role="listitem" class="toclevel-2 tocsection-22">
                            <a href="#Government">
                                <span class="tocnumber">5.2</span>
                                <span class="toctext">Government</span>
                            </a>
                        </div>
                        <div role="listitem" class="toclevel-2 tocsection-23">
                            <a href="#Separation_of_power_and_reform">
                                <span class="tocnumber">5.3</span>
                                <span class="toctext">Separation of power and reform</span>
                            </a>
                        </div>
                        <div role="listitem" class="toclevel-2 tocsection-24">
                            <a href="#Judicial_system">
                                <span class="tocnumber">5.4</span>
                                <span class="toctext">Judicial system</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div role="listitem" class="toclevel-1 tocsection-25">
                    <a href="#Administrative_divisions">
                        <span class="tocnumber">6</span>
                        <span class="toctext">Administrative divisions</span>
                    </a>
                </div>
                <div role="listitem" class="toclevel-1 tocsection-26">
                    <a href="#Economy">
                        <span class="tocnumber">7</span>
                        <span class="toctext">Economy</span>
                    </a>
                    <div role="directory">
                        <div role="listitem" class="toclevel-2 tocsection-27">
                            <a href="#Energy">
                                <span class="tocnumber">7.1</span>
                                <span class="toctext">Energy</span>
                            </a>
                        </div>
                        <div role="listitem" class="toclevel-2 tocsection-28">
                            <a href="#Science_and_technology">
                                <span class="tocnumber">7.2</span>
                                <span class="toctext">Science and technology</span>
                            </a>
                        </div>
                        <div role="listitem" class="toclevel-2 tocsection-29">
                            <a href="#Transport">
                                <span class="tocnumber">7.3</span>
                                <span class="toctext">Transport</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div role="listitem" class="toclevel-1 tocsection-30">
                    <a href="#Demographics">
                        <span class="tocnumber">8</span>
                        <span class="toctext">Demographics</span>
                    </a>
                    <div role="directory">
                        <div role="listitem" class="toclevel-2 tocsection-31">
                            <a href="#Education">
                                <span class="tocnumber">8.1</span>
                                <span class="toctext">Education</span>
                            </a>
                        </div>
                        <div role="listitem" class="toclevel-2 tocsection-32">
                            <a href="#Ethnic_groups">
                                <span class="tocnumber">8.2</span>
                                <span class="toctext">Ethnic groups</span>
                            </a>
                        </div>
                        <div role="listitem" class="toclevel-2 tocsection-33">
                            <a href="#Health">
                                <span class="tocnumber">8.3</span>
                                <span class="toctext">Health</span>
                            </a>
                        </div>
                        <div role="listitem" class="toclevel-2 tocsection-34">
                            <a href="#Language">
                                <span class="tocnumber">8.4</span>
                                <span class="toctext">Language</span>
                            </a>
                        </div>
                        <div role="listitem" class="toclevel-2 tocsection-35">
                            <a href="#Religion">
                                <span class="tocnumber">8.5</span>
                                <span class="toctext">Religion</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div role="listitem" class="toclevel-1 tocsection-36">
                    <a href="#Military">
                        <span class="tocnumber">9</span>
                        <span class="toctext">Military</span>
                    </a>
                </div>
                <div role="listitem" class="toclevel-1 tocsection-37">
                    <a href="#Legacy">
                        <span class="tocnumber">10</span>
                        <span class="toctext">Legacy</span>
                    </a>
                </div>
                <div role="listitem" class="toclevel-1 tocsection-38">
                    <a href="#Culture">
                        <span class="tocnumber">11</span>
                        <span class="toctext">Culture</span>
                    </a>
                </div>
                <div role="listitem" class="toclevel-1 tocsection-39">
                    <a href="#Sport">
                        <span class="tocnumber">12</span>
                        <span class="toctext">Sport</span>
                    </a>
                    <div role="directory">
                        <div role="listitem" class="toclevel-2 tocsection-40">
                            <a href="#Amateurism">
                                <span class="tocnumber">12.1</span>
                                <span class="toctext">Amateurism</span>
                            </a>
                        </div>
                        <div role="listitem" class="toclevel-2 tocsection-41">
                            <a href="#Doping">
                                <span class="tocnumber">12.2</span>
                                <span class="toctext">Doping</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div role="listitem" class="toclevel-1 tocsection-42">
                    <a href="#See_also">
                        <span class="tocnumber">13</span>
                        <span class="toctext">See also</span>
                    </a>
                    <div role="directory">
                        <div role="listitem" class="toclevel-2 tocsection-43">
                            <a href="#Conflicts">
                                <span class="tocnumber">13.1</span>
                                <span class="toctext">Conflicts</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div role="listitem" class="toclevel-1 tocsection-44">
                    <a href="#References">
                        <span class="tocnumber">14</span>
                        <span class="toctext">References</span>
                    </a>
                </div>
                <div role="listitem" class="toclevel-1 tocsection-45">
                    <a href="#Notes">
                        <span class="tocnumber">15</span>
                        <span class="toctext">Notes</span>
                    </a>
                </div>
                <div role="listitem" class="toclevel-1 tocsection-46">
                    <a href="#Bibliography">
                        <span class="tocnumber">16</span>
                        <span class="toctext">Bibliography</span>
                    </a>
                </div>
                <div role="listitem" class="toclevel-1 tocsection-47">
                    <a href="#Further_reading">
                        <span class="tocnumber">17</span>
                        <span class="toctext">Further reading</span>
                    </a>
                    <div role="directory">
                        <div role="listitem" class="toclevel-2 tocsection-48">
                            <a href="#Surveys">
                                <span class="tocnumber">17.1</span>
                                <span class="toctext">Surveys</span>
                            </a>
                        </div>
                        <div role="listitem" class="toclevel-2 tocsection-49">
                            <a href="#Lenin_and_Leninism">
                                <span class="tocnumber">17.2</span>
                                <span class="toctext">Lenin and Leninism</span>
                            </a>
                        </div>
                        <div role="listitem" class="toclevel-2 tocsection-50">
                            <a href="#Stalin_and_Stalinism">
                                <span class="tocnumber">17.3</span>
                                <span class="toctext">Stalin and Stalinism</span>
                            </a>
                        </div>
                        <div role="listitem" class="toclevel-2 tocsection-51">
                            <a href="#World_War_II_2">
                                <span class="tocnumber">17.4</span>
                                <span class="toctext">World War II</span>
                            </a>
                        </div>
                        <div role="listitem" class="toclevel-2 tocsection-52">
                            <a href="#Cold_War_2">
                                <span class="tocnumber">17.5</span>
                                <span class="toctext">Cold War</span>
                            </a>
                        </div>
                        <div role="listitem" class="toclevel-2 tocsection-53">
                            <a href="#Collapse">
                                <span class="tocnumber">17.6</span>
                                <span class="toctext">Collapse</span>
                            </a>
                        </div>
                        <div role="listitem" class="toclevel-2 tocsection-54">
                            <a href="#Specialty_studies">
                                <span class="tocnumber">17.7</span>
                                <span class="toctext">Specialty studies</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div role="listitem" class="toclevel-1 tocsection-55">
                    <a href="#External_links">
                        <span class="tocnumber">18</span>
                        <span class="toctext">External links</span>
                    </a>
                </div>
            </div>
        </div>

        <h2>An ARIA List with presentational DIV tags between the list and listitems</h2>

        <div role="list" class="product-images slick-initialized slick-slider slick-vertical">
            <div role="presentation" class="slick-list draggable" style="height: 580px">
                <div role="presentation" class="slick-track">
                    <div role="listitem">Test 1</div>
                    <div role="listitem">Test 2</div>
            </div>
        </div>
        </div>
    </main>
</body>

</html>