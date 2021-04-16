<?php


                // connect with database
                $host = 'localhost';        // database server name
                $user = 'jassaabh_jassaabh';      // your database username
                $pswd = '@_pfY&0T[]@5';      // your database password
                $dbName = 'jassaabh_mydatabase';        // database name

                $conn = mysqli_connect($host, $user, $pswd, $dbName);

                // if connection wasn't established
                if (empty($conn))
                {
                    die("Connection failed: <br>" . mysqli_connect_error());
                }

