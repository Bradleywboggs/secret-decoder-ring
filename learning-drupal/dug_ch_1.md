# Drupal Users Guide: Chapters 1, 2
## General Notes
A primary objective of Drupal (and that of CMSs in general) is to reduce the excessive amounts of
code duplication that can happen on large websites, with possibly hundreds of individual html files
with tons of shared code by breaking out the parts that can be reused


## 1.5 Types of Data

### 1. Content
- Info to be displayed to visitors
- relatively permanent, but editable
- e.g: blog post, recipe


### 2. Configuration
- Info that about the site that isn't content
- relatively permanent, but editable
- e.g.: routing, settings

### 3. State
- info about the current state of the site 
- temporary
- e.g: when crons were last run

### 4. Session
- subset of State data
- information about individual site visitor's interactions with the site
- e.g.:whether users are logged in, what cookies they have


## 2.1 Regions in a Theme

### What is a Region?
- A **Region** is distinct portion of a webpage: *content*, *header*, *footer*, 
*sidebar*, *menu*, *links* are all examples
- Each *Theme* defines/provides a set of named regions, where you may choose
 to place content
- The only required region is the *content* region
  

