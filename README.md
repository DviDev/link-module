# Link module
## Simple management of links

```mermaid
graph TD
    Any[...]-->Link;
    Link-->Tags;
    Link-->Comments;
```

### Actions
```mermaid
graph TD
    Link-->add;
    Link-->update;
    Link-->delete;
    Link-->Tags;
    Tags-->TagAdd[add];
    Tags-->TagDel[del];
    Link-->Comments;
    Comments-->CommentAdd[add];
    Comments-->CommentDel[del];
    Comments-->CommentLike[like];
    Comments-->CommentDislike[dislike];
    Comments-->CommentReply[reply];
```
