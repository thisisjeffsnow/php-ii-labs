# Notes

Idea is a "To-Do List" type of app. I like the name TaskMaster.

A core class would be the Task class.

Tasks would have attributes like an ID, a title, a description, a location
(for example, work, or home), an expiry (or due date), frequency (how often
they reoccur, if at all), and some fun attributes like, enjoyment, which would
be an integer from 1 to 10 rating how 'fun' the task would be to complete,
as well as, importance, an integer from 1 to 10, rating how seriously one
should consider completing the task.

Task could be a superclass, SubTask would be a subclass.

SubTask would carry all of the same attributes, but also include a parent_id,
so that we can link it to the Task it originates from. Some tasks have various
multiple steps that don't make sense to be on their own Task instance. This
would also assist in motivating the completion of the task itself as breaking
tasks into smaller managable chunks is a typical strategy.
