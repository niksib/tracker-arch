### Tracker architecture

## Deploy guide
1. Clone this project.
2. Open project root and run `composer install` command.
3. Run `symfony server:start`(if you have pre-installed symfony) in project root or `php -S 127.0.0.1:8000` in `./project_root/public` folder for start dev server.
4. Try send requests to - `http://127.0.0.1:8000`

## Available routes
1. POST `/auth/register` - Register user
2. POST `/auth/{userId}/ban` - Ban user by ID
3. POST `/payment/{userId}/pay` - Pay for user account by ID


All events writing to the log
