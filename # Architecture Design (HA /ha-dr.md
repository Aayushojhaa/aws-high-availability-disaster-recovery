 High Availability & Disaster Recovery Strategy

 High Availability (Within a Region)

- EC2 Auto Scaling Group spans multiple Availability Zones
- Application Load Balancer performs health checks
- Unhealthy instances are automatically replaced

 Disaster Recovery (Across Regions)

- Primary Region: Mumbai (ap-south-1)
- DR Region: US-East-1 (N. Virginia)

Amazon Route 53 performs:
- Continuous health monitoring
- Automatic DNS failover
- Seamless traffic redirection

This ensures the application remains available even during regional outages.
