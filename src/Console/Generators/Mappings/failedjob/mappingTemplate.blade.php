{{$namespace}}:
    type: entity
    table: failed_jobs
    id:
      id:
        type: integer
        nullable: false
        column: id
        id: true
    fields:
      connection:
        type: string
        nullable: false
        length: 200
        column: connection
      queue:
        type: stirng
        nullable: false
        length: 100
        column: queue
      payload:
        type: text
        nullable: false
        column: payload
      failed_at:
        type: timestamp
        nullable: false
        column: failed_at