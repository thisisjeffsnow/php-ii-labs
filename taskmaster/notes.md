## Notes

Idea is a "To-Do List" type of app. I like the name TaskMaster.

A core class would be the Task class.

Tasks would have attributes like an ID, a title, a description, a location
(for example, work, or home), an expiry (or due date), frequency (how often
they reoccur, if at all), and some fun attributes like, enjoyment, which would
be an integer from 1 to 10 rating how 'fun' the task would be to complete,
as well as, importance, an integer from 1 to 10, rating how seriously one
should consider completing the task.

Superclass would be an AbstractTask then. The AbstractTask is what all tasks
would have in common, and then each categorization of tasks would be its own
subclass which extends from AbstractTask. What I thought would have been
SubTask could be re-imagined as each descendant of AbstractTask having an array
of Objectives instead.

A descendant of AbstractTask for example might be to take out your trash, but
that is very broad. What does that even mean?

Objectives listed in this Task would further detail the steps to complete task.
```
Objective: Remove garbage bag from bin and throw in dumpster.
Objective: Replace bag in bin with new one.
```

Objective would be a different class and we could tie Objectives to Tasks,
rather than imagining these Objectives as descendant types of the same class
Task.

Board would be another class. Descendants of AbstractTask would belong to
Boards.