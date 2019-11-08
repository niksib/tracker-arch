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

## How add new tracker
1. Create new Tracker, Tracker should implement Trackable interface
2. Add new Tracker to `app.trackers` parameter in `app/config/services_{env}.yaml`
3. Add new Tracker as a service in `app/config/services_{env}.yaml`

## How add new User event
1. Create new UserEvent, UserEvent should extends UserBaseEvent
2. Add new UserEvent to UserEventSubscriber in `app/config/services.yaml`
3. Dispatch event in your service

All events writing to the log
