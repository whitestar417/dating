<?php

/* getIndoorInterests()
 *   returns an array of indoor interests
 *   @return array
 */
function getIndoorInterests()
{
    $indoors = array("tv", "movies", "cooking", "board games", "puzzles", "reading", "playing cards", "video games");
    return $indoors;
}

/* getOutdoorInterests()
 *   returns an array of outdoor interests
 *   @return array
 */
function getOutdoorInterests()
{
    $outdoors = array("hiking", " biking", "swimming", "collecting", "walking", "climbing");
    return $outdoors;
}

/*
 * getStateAbbrev()
 * returns an array of state abbreviations
 * @return array
 */
function getStateAbbrev()
{
    $stateAbbrev = array("AL","AK","AZ","AR","CA","CO","CT","DE","FL","GA","HI","ID","IL","IN","IA","KS","KY","LA","ME","MD","MA","MI","MN",
        "MS","MO","MT","NE","NV","NH","NJ","NM","NY","NC","ND","OH","OK","OR","PA","RI","SC","SD","TN","TX","UT","VT","VA","WA","WV","WI","WY");
    return $stateAbbrev;
}

/*
 * getState()
 * returns an array of statES
 * @return array
 */
function getState()
{
    $state = array("Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia",
        "Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota",
        "Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Carolina",
        "North Dakota","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas",
        "Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming");
    return $state;
}
