Available commands:
  about                                   Displays information about the current project
  help                                    Displays help for a command
  list                                    Lists commands
 assets
  assets:install                          Installs bundles web assets under a publicdirectory
 cache
  cache:clear                             Clears the cache
  cache:pool:clear                        Clears cache pools
  cache:warmup                            Warms up an empty cache
 config
  config:dump-reference                   Dumps the default configuration for an extension
 debug
  debug:config                            Dumps the current configuration for an extension
  debug:container                         Displays current services for an application
  debug:event-dispatcher                  Displays configured listeners for an application
  debug:router                            Displays current routes for an application
  debug:twig                              Shows a list of twig functions, filters, globals and tests
 doctrine
  doctrine:cache:clear-collection-region  Clear a second-level cache collection region.
  doctrine:cache:clear-entity-region      Clear a second-level cache entity region.
  doctrine:cache:clear-metadata           Clears all metadata cache for an entity manager
  doctrine:cache:clear-query              Clears all query cache for an entity manager
  doctrine:cache:clear-query-region       Clear a second-level cache query region.
  doctrine:cache:clear-result             Clears result cache for an entity manager
  doctrine:cache:contains                 Check if a cache entry exists
  doctrine:cache:delete                   Delete a cache entry
  doctrine:cache:flush                    [doctrine:cache:clear] Flush a given cache
  doctrine:cache:stats                    Get stats on a given cache provider
  doctrine:database:create                Creates the configured database
  doctrine:database:drop                  Drops the configured database
  doctrine:database:import                Import SQL file(s) directly to Database.
  doctrine:ensure-production-settings     Verify that Doctrine is properly configured for a production environment.
  doctrine:generate:entities              [generate:doctrine:entities] Generates entity classes and method stubs from your mapping information
  doctrine:mapping:convert                [orm:convert:mapping] Convert mapping information between supported formats.
  doctrine:mapping:import                 Imports mapping information from an existing database
  doctrine:mapping:info
  doctrine:migrations:diff                Generate a migration by comparing your current database to your mapping information.
  doctrine:migrations:execute             Execute a single migration version up or down manually.
  doctrine:migrations:generate            Generate a blank migration class.
  doctrine:migrations:latest              Outputs the latest version number
  doctrine:migrations:migrate             Execute a migration to a specified versionor the latest available version.
  doctrine:migrations:status              View the status of a set of migrations.
  doctrine:migrations:version             Manually add and delete migration versionsfrom the version table.
  doctrine:query:dql                      Executes arbitrary DQL directly from the command line.
  doctrine:query:sql                      Executes arbitrary SQL directly from the command line.
  doctrine:schema:create                  Executes (or dumps) the SQL needed to generate the database schema
  doctrine:schema:drop                    Executes (or dumps) the SQL needed to dropthe current database schema
  doctrine:schema:update                  Executes (or dumps) the SQL needed to update the database schema to match the current mapping metadata.
  doctrine:schema:validate                Validate the mapping files.
 lint
  lint:twig                               Lints a template and outputs encountered errors
  lint:yaml                               Lints a file and outputs encountered errors
 router
  router:match                            Helps debug routes by simulating a path inf