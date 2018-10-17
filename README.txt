Web interface created using the bootstrap framework.

The project runs as a fashion suggestion website where users can upload their own fashion styles as suggestions for others to follow. 

The project runs on a Cassandra NoSQL database and utilises Spark via Zeppelin in order to currently calculate statistics about the website entries using aggregate functions.

In the future, it is planned that the Spark functionality wil be expanded to include machine learning to determine colours and clothing styles submitted, spark jobserver and zookeeper will be implemented to provide a restful api interface to spark and to ensure high availability.

The setup files for the cassandra database is located in _cassandra/database-setup.cql and the zeppelin notebook is located in _zeppelin/Mapreduce.json.

Zeppelin URL: http://s4389766.uqcloud.net/
Cass-PHP URL: s4269240-phpcass.uqcloud.net